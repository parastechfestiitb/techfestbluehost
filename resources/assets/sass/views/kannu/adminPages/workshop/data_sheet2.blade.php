<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>Full Compi Email problem Sorted</title>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>

</head>

<body>
  <script src="//cdn.ckeditor.com/4.7.3/full-all/ckeditor.js"></script>

  <form action="/work/submit" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <textarea cols="80" id="editor1" name="editor1" rows="10" >&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;
  </textarea>

  <fieldset style="border: none;">
        <label for="event_select_for" style="font-size: 20px">Select Event:</label>
        <select id="event_select" name="table" style="padding: 10px;font-size: 15px;">
          <optgroup label="Workshops List">
                <option value="admin">Admin</option>
                <option value="accomodationdatasheet">Accomodation</option>
            @foreach ($data_compi as $user)
                <option value="{{$user->table_name}}">{{$user->table_name}}</option>
            @endforeach
          </optgroup>          
        </select>
        
        <select id="event_select" name="user_email" style="padding: 10px;font-size: 15px;">
          <optgroup label="Email List">
                <option value="abhinavkaushik0898@gmail.com">Abhinav</option>
                <option value="harsh.sharma12417@gmail.com">Harsh Sharma</option>
                <option value="himanshu.kala97@gmail.com">Himanshu Kala</option>
                <option value="gawandeprithviraj574@gmail.com">Prithviraj</option>
          </optgroup>          
        </select>

          <label for="name">User name:</label>
          <input type="text" id="name" name="admin" style="padding: 10px;font-size: 15px;">
          
          <label for="name">User email-id:</label>
          <input type="text" id="name" name="admin_email" style="padding: 10px;font-size: 15px;">

        </fieldset>

        <label for="name">Email Subject:</label>
        <input type="text" id="name" name="subject" style="padding: 10px;font-size: 15px;" placeholder="subject of the mail">

  <button type="submit" style="font-size: 20px;
    padding: 15px 35px;
    border: none;
    margin: 5px;
    background: black;
    color: white;">Submit</button>

    </form>

  <script>
    CKEDITOR.replace( 'editor1', {
      height: 400
    } );
  </script>
</body>

</html>