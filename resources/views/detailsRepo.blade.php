<style>
    .list-group-alpha {
  padding: 10px;
  background-color: #fff;
  position: relative;
}

.list-group-alpha > .list-group-item {
  margin-bottom: 10px;
  position: relative;
}

.list-group-alpha > .list-group-item > a {
  display: block;
}

.list-group-alpha .sprites-tick {
  color: #00aa00;
  display: none;
  position: absolute;
  right: 0;
}

.list-group-alpha .lgi-multi-line .sprites-tick {
  top: 36%;
}

.list-group-alpha > .list-group-item > a {
  position: relative;
}

.list-group-alpha > .list-group-item > a,
.list-group-alpha > .list-group-item > a:hover,
.list-group-alpha > .list-group-item > a:focus{
  color: #ddd;
  text-decoration: none;
}


.list-group-alpha > .list-group-item-selected {
  background-color: #aaa;
}

.list-group-alpha > .list-group-item-selected .sprites-tick {
  display: inline-block;
}

.list-group-alpha > .list-group-item-selected > a,
.list-group-alpha > .list-group-item-selected > a:hover,
.list-group-alpha > .list-group-item-selected > a:focus{
  color: #fff;
}

.list-group-alpha > .list-group-item:last-child {
  margin-bottom: 0;
}

.list-group-alpha .lgi-multi-line > a {
  padding-right: 30px;
}

#logout{
    padding: 15px;
    border: none;
    text-decoration: none;
    font-size: 1.3rem;
    font-weight: bold;
    background: #000;
    color: #fff;
    margin-top: 10px;
}
</style>

<div class="logout">
    <a href="/home" id="logout">Home</a>
</div>

<div class="container center-block" style="margin-top:20px;width:550px;">

@for($i=0; $i < count($repo); $i++)

<div class="list-group list-group-alpha">

    <div class="list-group-item list-group-item-selected lgi-multi-line">
        <a href="#" style="padding: 6px;">
            <div class=""><h4>{{$repo[$i]['commit']['author']['name']}}</h4></div>
            <div class="lgi-description">
               {{$repo[$i]['commit']['message']}}
            </div>
            <div class="" style="color: #000; margin-top: 4px;"><strong>{{$repo[$i]['commit']['author']['date']}}</strong></div>
        </a>
    </div>
</div>

@endfor

</div>
