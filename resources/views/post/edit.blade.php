@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href=" {{ route('post.index')}}">بازگشت</a>
            </div>
        </div>
    </div>

    <form action="{{ route('post.update' , $post->id)}}" method="POST">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="text" name="user_id" value="{{ $post->user->name}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                @csrf
                @method('PUT')
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection
