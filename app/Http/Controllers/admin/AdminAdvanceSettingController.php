<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use Carbon\Carbon;


class AdminAdvanceSettingController extends Controller{
    public function advance_setting(){
        $seo = Seo::findOrFail(1);
        return view('backend.advance_setting.seo', compact('seo'));
    }

    function update_advance_setting(Request $request, $up_id) {

        $seo = Seo::findOrFail($up_id);

        $old_image = $seo->footer_logo;

        if ($request->hasFile('footer_logo')) {
            $image = $request->file('footer_logo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('backend/uploads/footer_logo/',  $name_gen);
            $save_url = 'backend/uploads/footer_logo/' . $name_gen;
            $seo->footer_logo = $save_url;

            if (file_exists($old_image)) {
                unlink($old_image);
            }

        }

        $seo->meta_title = $request->meta_title;
        $seo->meta_keyword = $request->meta_keyword;
        $seo->meta_description = $request->meta_description;
        $seo->facebook = $request->facebook;
        $seo->twitter = $request->twitter;
        $seo->google = $request->google;
        $seo->linkedin = $request->linkedin;
        $seo->updated_at = Carbon::now();
        $seo->save();

        return response()->json(['status' => 'success', 'message' => 'Advance Setting is updated successfully!']);
    }
}
