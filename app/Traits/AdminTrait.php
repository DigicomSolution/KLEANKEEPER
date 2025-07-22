<?php

namespace App\Traits;

use View, Input, Request, DataTables, Form, Redirect;
use Illuminate\Http\Exception\HttpResponseException;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Models\MediaLibrary as Media;
use Auth;

trait AdminTrait{

	public function saveMedia($upload)
    {
        $media = new Media;
        $media->file_name = $upload['filename'];
        $media->file_path = $upload['filepath'];
        $media->thumb_file_path = $upload['mediathumb'];
        $media->file_type = $upload['filetype'];
        $media->file_size = $upload['filesize'];
        $media->dimensions = $upload['filedimensions'];
        $media->media_type = $upload['mediatype'];
        if(isset($upload['related_type']) && $upload['related_type']!='' && isset($upload['related_id']) && $upload['related_id']!='')
        {
            $media->related_type = $upload['related_type'];
            $media->related_id = $upload['related_id'];
        }
        $media->created_by = $media->updated_by = Auth::user()->id;
        $media->save();
                
        $data = array(
                    'name' => $media->file_name,
                    'size' => $media->file_size,
                    'id' => $media->id,
                    'original_file' => \URL::to('').'/public/'.$media->file_path,
                    'type' => $media->file_type,
                    'url' => $media->thumb_file_path,
                );
        return $data;
    }
}