<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Models\Page;// OLuşturulan Modeli kullanabilmek için buraya ekliyoruz
use App\Models\Test;// OLuşturulan Modeli kullanabilmek için buraya ekliyoruz

class PageController extends Controller
{
    public function index()
    {
      // $page=Page::where('id', 1)->update([//Page Model üzerinden update işleminin yapılması start
      //       'page_title' => 'Cem İlker'
      // ]);//Page Model üzerinden update işleminin yapılması stop

      //$page=Page::where('id', 2)->delete();//Page Model üzerinden delete işleminin yapılması-single line
      //Page::destroy(7,8);//Page Model üzerinden destroy ile id numarasına göre verileri silme işleminin yapılması-single line

      $page=Test::where('name', 'cem')->delete();//Page Model üzerinden delete işleminin yapılması-single line

    // $page=new Page;//Page Model üzerinden yeni kayıt işleminin yapılması start
    // $page->page_title="New Page 001";
    // if ($page->save())//Page Model üzerinden yeni kayıt işleminin yapılması end
    {
      return "işlem tamamdır!";
    }


    }

    public function list()
    {
        $test=Test::all();//Model kullanarak tüm verileri listelemek start
        foreach ($test as $key) {
          echo $key->name.' ';
          echo $key->surname.'<br>';//Model kullanarak tüm verileri listelemek stop
        }
    {
      return "işlem tamamdır!";
    }


    }

}
