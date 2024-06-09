@if (Session::has('sent'))
    <div>
        {{--  --}}
        <p>{{old('name')}}に{{ session('sent') }}</p>
    </div>
@endif

<form action="{{ url('contact') }}" method="POST">
    @csrf
    <p>現在のパスワード：example@gmail.com</p>
    <p>再設定用のパスワードを入力してください</p>
    <p><input type="text" name="name"></p>

    <input type="submit" value="送信">
</form>
