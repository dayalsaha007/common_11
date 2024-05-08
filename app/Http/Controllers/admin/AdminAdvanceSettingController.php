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

        if ($request->hasFile('favicon')) {
            $request->validate([
                'favicon'=>"image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048",
            ]);
            $image = $request->file('favicon');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('backend/uploads/favicon/' , $name_gen);
            $save_url = 'backend/uploads/favicon/' . $name_gen;
            if ($seo->favicon && file_exists(public_path($seo->favicon))) {
                unlink(public_path($seo->favicon));
            }
            $seo->favicon = $save_url;
        }

        $seo->top_bar_phone = $request->top_bar_phone;
        $seo->top_bar_email = $request->top_bar_email;
        $seo->footer_address = $request->footer_address;
        $seo->footer_phone = $request->footer_phone;
        $seo->footer_email = $request->footer_email;
        $seo->copyright = $request->copyright;
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
