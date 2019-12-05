<?php

namespace App\Http\Controllers\Mail;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Email;
use App\Recipent;
use Mail;

class MailController extends Controller
{
    public function Get(){
        $admin = session()->get('admin');
        return view('admin.mail.Get')->with(['admin'=>$admin]);
    }
    public function mailListGet(){
        if(session()->get('admin')->id===1) return Email::get();
        return Email::where(['admin_id'=>session()->get('admin')->id])->get();
    }

    public function mailGet($mail){
        if(session()->get('admin')->id===1) return Email::whereId(['id'=>$mail])->first();
        return Email::whereId(['id'=>$mail,'admin_id'=>session()->get('admin')->id])->first();
    }

    public function listGet(){
        $mails = Email::where(['admin_id'=>session()->get('admin')->id])->get();
        if(session()->get('admin')->id===1)   $mails = Email::get();
        return view('admin.mail.listGet')->with(['mails'=>$mails]);
    }

    public function createTemplateGet(){
        return view('admin.mail.create.templateGet');
    }

    public function createTemplatePost(Request $request){
        Email::insert(['name'=>$request->name,'content'=>$request->editordata,'admin_id'=>session()->get('admin')->id]);
        return redirect()->route('admin.mail.Get');
    }
    public function mailDestroyPost($id){
        /** @var App\Email $email */
        Email::whereId($id)->delete();
    }
    public function sendPost(Request $request){
        $recipents = explode(',',$request->sendTo);
        $name = $request->name;
        foreach($recipents as $recipent){
            Mail::send('admin.mail.sendPost',['email'=>$request->email,'request'=>$request,'name'=>$name],function($message) use ($name,$request,$recipent){
                $message->from($request->sender,$name);
                $message->to($recipent);
                $message->subject($request->subject);
            });
        }
        return redirect()->route('admin.mail.Get')->with('success','Queued Mails! Will be send in few hours');
    }
    public function mailEditGet($email){
        $id = $email;
        $email = Email::where(['id'=>$email,'admin_id'=>session()->get('admin')->id])->first();
        if(!$email) abort(403);
        return view('admin.mail.create.templateGet',compact('email','id'));
    }
    public function mailEditPost($email,Request $request){
        $email = Email::where(['id'=>$email,'admin_id'=>session()->get('admin')->id])->first();
        if(!$email) abort(403);
        $email->name = $request->name;
        $email->admin_id = session()->get('admin')->id;
        $email->content = $request->editordata;
        $email->save();
        return redirect()->route('admin.mail.listGet');
    }
    public function recipentCreateGet(){
        return view('admin.mail.recipents.createGet');
    }
    public function recipentCreatePost(Request $request){
        $recipent  = new Recipent();
        $recipent->name = $request->name;
        $recipent->admin_id = session()->get('admin')->id;
        $recipent->emails = $request->emails;
        $recipent->save();
        return redirect()->route('admin.mail.recipents.createGet');
    }
    public function recipentListGet(){
        return Recipent::where('admin_id',session()->get('admin')->id)->get(['name','id']);
    }
    public function recipentGet(Recipent $recipent){
        return $recipent;
    }
    public function recipentUpdateGet(Recipent $recipent){
        if($recipent->admin_id === session()->get('admin')->id) return $recipent;
        else return abort(403);
    }
    public function recipentUpdatePost(Recipent $recipent,Request $request){
        if($recipent->admin_id !== session()->get('admin')->id) return abort(403);
        $recipent->name = $request->name;
        $recipent->emails = $request->emails;
        $recipent->save();
        return redirect()->route('admin.mail.recipents.createGet');
    }
    public function recipentDestroyPost(Recipent $recipent){
        if($recipent->admin_id !== session()->get('admin')->id) return abort(403);
        /** @var App\Recipent $recipent */
        $recipent->delete();
        return redirect()->route('admin.mail.recipents.createGet');
    }
}
