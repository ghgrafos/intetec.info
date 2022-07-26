<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Upload behavior
 */
class UploadBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'destination'=> WWW_ROOT.'upload',
        'image'=>[
            'destination'=> WWW_ROOT.'upload',
            'image'=>[
                'width'=>null,
                'height'=>null,
                'crop'=>false
            ],
            'image_thumb'=>[
                'width'=>200,
                'height'=>200,
                'crop'=>false
            ],
        ],
    ];


    public function singleUpload(array $file, $oldImage = null)
    {
        if ($file['error']) {
            return $oldImage;
        }

        $methodMaster = explode('/', $file['type'])[0];

        $method = str_replace('/', ' ', $file['type']);
        $method = str_replace(' ', '', ucwords($method));
        $method = lcfirst($method);

        if (method_exists($this, $methodMaster)) {
            return $this->$methodMaster($file);
        }

        if (method_exists($this, $method)) {
            return $this->$method($file);
        }

        return $this->upload($file);
    }

    public function multipleUpload($field, $data)
    {
        $toEntity = [];

        $files = $data[$field];
        unset($data[$field]);

        foreach ($files as $k=>$file) {
            $toEntity[$k] = $data;
            $toEntity[$k][$field] = $this->singleUpload($file);
        }

        return $toEntity;
    }

    public function remove($file, $destination=null)
    {
        if ($destination === null) {
            $destination = $this->config('destination');
        }

        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($destination, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileinfo) {
            if ($fileinfo->getFileName() == $file) {
                unlink($fileinfo->getPathName());
            }
        }
    }

    protected function upload($file)
    {
        extract($file);

        $name = $this->setName($name);

        if (!move_uploaded_file($tmp_name, $this->config('destination').DS.$name)) {
            throw new \Exception("Não foi possível mover o arquivo");
        }

        return $name;
    }

    protected function image($file)
    {
        $file['name'] = $this->setName($file['name']);
        $config = $this->config('image');

        $this->imageSave($file, $config['destination'], $config['image']);
        $this->imageSave($file, $config['destination'].DS.'thumb', $config['image_thumb']);

        return $file['name'];
    }

    private function imageSave($file, $destination, $config)
    {
        extract($file);
        $img = Image::make($tmp_name);

        if (!empty($config['width']) and !empty($config['height'])) {
            $img = $img->resize($config['width'], $config['height']);
        } else if (!empty($config['width']) and empty($config['height'])) {
            $img = $img->widen($config['width']);
        } else if (empty($config['width']) and !empty($config['height'])) {
            $img = $img->heighten($config['height']);
        }

        if ($config['crop']) {
            $img->crop(
                $config['crop']['width'],
                $config['crop']['height'],
                $config['crop']['x'],
                $config['crop']['y']
            );
        }

        $img->save($destination.DS.$name);
    }

    private function setName($name)
    {
        extract(pathinfo($name));

        $i = 1;

        while (file_exists($this->config('destination').DS.$name)) {
            $i++;
            $name = $filename.'-'.$i.'.'.$extension;
        }

        return $name;
    }
}
