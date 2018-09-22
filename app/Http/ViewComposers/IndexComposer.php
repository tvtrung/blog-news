<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class IndexComposer {
    
    /**
     * The system repository implementation.
     *
     * @var NewletterRepository
     */
    //protected $newletter;
    
    /**
     * Create a new profile composer.
     *
     * @param  SystemRepository  $newletter
     * @return void
     */
    public function __construct() {
       
    }
    
    public function compose(View $view) {
        //congigs
        $data = DB::table('configs')->get();
        if($data->count() > 0){
            foreach ($data as $k => $v) {
                $array_value = json_decode($v->value, true);
                $configs_data[$v->key] = $array_value;
            }
        }
        else{
            $configs_data['key'] = 'value';
        }
        $view->with('configs_data', $configs_data);

        //images
        $array_type_image = array();
        $data = DB::table('images')->select('type')->groupBy('type')->get();
        foreach ($data as $key => $value) {
            array_push($array_type_image,$value->type);
        }
        foreach ($array_type_image as $value) {
            $data = DB::table('images')->where('type',$value)->where('status',1)->get();
            $images_data[$value] = $data;
            $view->with('images_data', $images_data);
        }

        //product
        $array_product = DB::table('products')->where('status',1)->get();
        $view->with('product_data', $array_product);

    }
    
}
