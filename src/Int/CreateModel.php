<?php


namespace Liteas98\Cp\Int;


class CreateModel
{
    public $name = '';
    public $table_name = '';
    public $primary_key = null;
    public $incrementing = null;
    public $key_type = null;
    public $timestamps = null;
    public $date_format = null;
    public $auth = null;
    public $has_slug = null;
    public $notifiable = null;

    public function __construct($model)
    {
        $this->name = $model->name;
        $this->table_name = $model->table_name;
        $this->primary_key = $model->primary_key ?: null;
        $this->incrementing = $model->incrementing ?: null;
        $this->key_type = $model->key_type ?: null;
        $this->timestamps = $model->timestamps ?: null;
        $this->date_format = $model->date_format ?: null;
        $this->auth = $model->auth ?: null;
        $this->has_slug = $model->has_slug ?: null;
        $this->notifiable = $model->notifiable ?: null;
    }

    public function create(){
        $dashboard = config('dashboard.dashboard');
        $auth = "";
        $name = $this->name;
        if ($this->auth == true){
            $auth = "extends Authenticatable";
        }
        $data = "
            <?php

                namespace App\Models;
                
                {$this->make_class_use()}
                
                class $name $auth {
                    {$this->make_class_use_ap()}
                }
        ";

        if ($dashboard == 'vuexy') {
            file_put_contents(__DIR__ . '/../dashboard/vuexy/app/Models/' . $this->name . '.php', $data);
        }
    }

    public function make_class_use(){
        $data = '';
        if ($this->auth == true){
            $data .= "
                use Illuminate\Contracts\Auth\MustVerifyEmail;
                use Illuminate\Foundation\Auth\User as Authenticatable;
            ";
        }
        if ($this->notifiable == true){
            $data .= "
                use Illuminate\Notifications\Notifiable;
            ";
        }
        if ($this->has_slug == true){
            $data .= "
                use Spatie\Sluggable\HasSlug;
                use Spatie\Sluggable\SlugOptions;
            ";
        }
        return $data;
    }

    public function make_class_use_ap(){
        $data = "";
        if ($this->notifiable == true){
            $data .= "use Notifiable;";
        }
        if ($this->has_slug == true){
            $data .= "use HasSlug;";
        }
        return $data;
    }
}