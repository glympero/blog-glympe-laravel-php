<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactMessage;
use Illuminate\Support\Facades\Event;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Response;

class ContactMessageController extends Controller{
    
    public function getContactIndex(){
    
        return view('frontend.other.contact');
    }
    
    public function postSendMessage(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|max:20',
            'subject' => 'required|max:80',
            'message' => 'required|max:160'
        ]);
        
        $message = new ContactMessage();
        $message->email = $request['email'];
        $message->sender  = $request['name'];
        $message->subject = $request['subject'];
        $message->body = $request['message'];
        $message->save();
        Event::fire(new MessageSent($message));
        return redirect()->route('contact')->with(['success' => 'Message sent!']);
    }
    
    public function getContactMessageIndex(){
        $contact_messages = ContactMessage::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.other.contact_messages', ['contact_messages' => $contact_messages]);
    }
    
    public function getDeleteMessage($message_id){
        $message = ContactMessage::find($message_id);
        if(!$message){
            return Response::json(['message' => 'Message not found' ], 404);
            
        }
        $message->delete();
        return Response::json(['message' => 'Message deleted'] , 200);
    }
}