@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-9" id="addBookForm">


<h2>共享图书</h2>
    <p class="help">个人共享实体图书时，所有权依然归本人所有，有人借阅时你将收到通知，当面给予对方即可。</p>
    <form class="form-horizontal" method="POST">
        <hr>

        <div class="form-group">
    		<label class="col-sm-2 control-label"><span class="required">*</span> 图书类型</label>
		    <div class="col-sm-8">
		        <label class="radio-inline">
		      		<input type="radio" checked name="book_type" id="" value="book" v-model="book_type"> 实体图书
			    </label>
		    </div>
		</div>

		  <div class="form-group">
		    <label for="douban_url" class="col-sm-2 control-label"><span class="required">*</span> 豆瓣链接</label>
		    <div class="col-sm-8">
		      <input type="text" id="douban_url" name="douban_url" class="form-control" placeholder="如：http://book.douban.com/subject/26306686/">
		    </div>
		  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">提交</button>
	    </div>
	  </div>

  	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
</form>


</div>
</div>
@endsection