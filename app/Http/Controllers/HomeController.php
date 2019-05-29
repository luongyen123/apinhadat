<?php

namespace App\Http\Controllers;

use App\Tintuc;
use App\Tinmuaban;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Resources\TinmuabanCollection;

class HomeController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Loai bai ==1=> them tin mua ban
     * Loai bai ==2 => them tin tuc nha dat
     */
    public function createNews(Request $request){
        $loaibai = $request->loaibai;
        
        if($loaibai ==1){
            $data = Tinmuaban::createTinmuaban($request->all());
        }else{
            $data = Tintuc::createNews($request->all());
        }
        return $this->successResponseMessage($data,200,"Tao thanh cong");
    }

    public function getTinmuaban(){
        $title ="Tin mua bán";
        $id = "tinmuaban";

        $tinmuaban = Tinmuaban::paginate(10);       

        return view('contents.tinmuaban',\compact(['tinmuaban','title','id']));
    }
    public function getTintucnhadat($idTin){
       
        if($idTin === 1){
            $title ="Tin tức dự án";
            $id = "tintucduan";
        }else{
            $title ="Tin tức nhà đất";
            $id = "tintucnhadat";
        }   
        $tintucs = Tintuc::where('loaitin_id',$idTin)->paginate(10);
        return view('contents.tintucnhadat',\compact(['tintucs','title','id']));
    }
    public function getEditTinmua($idTin){
        
        $title ="Sửa bài viết Tin mua bán nhà đất";
        $id = "tinmuaban";
        $tinmua = Tinmuaban::where('id',(int)$idTin)->first();
      
        return view('contents.editTinmua',\compact(['tinmua','title','id']));
    }
    public function postEditTinmua(Request $request){
        $id = $request->news_id;
        
      
        return $this->successResponseMessage($data,200,"Tao thanh cong");
    }
}
