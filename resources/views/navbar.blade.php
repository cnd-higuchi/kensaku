{{-- resouces/views/navbar.blade.php --}}
 
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- スマホやタブレットで表示した時のメニューボタン -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                ...
            </button>
 
            <!-- ブランド表示 -->
            <a class="navbar-brand" href="/">CreativeNetDoor</a>
        </div>
 
        <!-- メニュー -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 
            <!-- 左寄せメニュー -->
            <ul class="nav navbar-nav">
                <li><a href="/timecard">タイムカード</a></li>
                <li><a href="/about">About</a></li>
            </ul>
 
            <!-- 右寄せメニュー -->
            <ul class="nav navbar-nav navbar-right">
 
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

