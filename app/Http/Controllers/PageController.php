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

      $page=Test::where('name', 'birisi')->delete();//Page Model üzerinden delete işleminin yapılması-single line

    // $page=new Page;//Page Model üzerinden yeni kayıt işleminin yapılması start
    // $page->page_title="New Page 001";
    // if ($page->save())//Page Model üzerinden yeni kayıt işleminin yapılması end
    {
      return "işlem tamamdır!";
    }


    }

    public function list()
    {
        //$test=Test::all();//Model kullanarak tüm verileri listelemek start-1
        //$test=Test::withTrashed()->get();//Model kullanarak yumuşak silinenler dahil tüm verileri listelemek start-2
        // $test=Test::onlyTrashed()->get();//Model kullanarak sadece yumuşak silinen verileri listelemek start-3
        // foreach ($test as $key) {
        //   echo $key->name.' ';
        //   echo $key->surname.'<br>';//Model kullanarak tüm verileri listelemek stop-1 stop-2 stop3

          //$test=Test::withTrashed()->restore();//Model kullanarak yumuşak silinen tüm verileri geri getirmek-single line
          //Test::where('name', 'cem')->restore();//Page Model üzerinden yumuşak silinen verilerden seçileni geri getirme-single line
          Test::withTrashed()->where('name', 'birisi')->forceDelete();//Page Model üzerinden yumuşak silinen verilerden seçileni geri getirme-single line

          $test=Test::all();//Model kullanarak tüm verileri listelemek start-1
          foreach ($test as $key) {
            echo $key->name.' ';
            echo $key->surname.'<br>';//Model kullanarak tüm verileri listelemek stop-1

        }
    {
      return "işlem tamamdır!";
    }


    }

}
