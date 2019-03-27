<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //Relation between model Article  and category
    // har Article shaeml ye Category mishe  :
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }


    //ebteda request category ro migirim bad check mikonim age vojod dasht va khali nabod va brabar all nabod
    //beiya tamam article ha ke daraye in category  hastn ro bargardon.

    //

    public function scopeFilter($query)
    {
        $category = request('category');
        if( isset($category) && trim($category) != '' && $category != 'all') {
            $query->whereHas('category' , function ($query) use ($category) {
                $query->whereId($category);
            });
        }

        //ba in shart age request('order') == 'oldest' bod Article ha ro be sorate soudi az akhar be aval moratab mikonim
        if(request('order') == 'oldest') {
            $query->oldest();
        }
        //age  request('order') == 'latest') Article ha ro be sorate nozuli az aval be akhar moratab mikonim
        elseif(request('order') == 'latest') {
            $query->latest();
        }
        return $query;
    }
}
