<style>
.lista{
    margin: auto;
    width: 45%;
    height: 90vh;
    background: #ddd;
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
}

ul{
    list-style-type: none;
}

li{
    padding: 10px;
    background-color: #000110;
    border-radius: 6px;
}

a{
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 1.3rem;
}

a li:hover{
    transform: scale(1.3);
    transition: all ease 5s;
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

<div class="lista">
    <h2>Lista de repositórios públicos</h2>
    @foreach ($repos as $repo)
    <ul>
        <a href="/detailsRepo/{{$repo['name']}}"><li>{{$repo['name']}}</li></a>
    </ul>
    @endforeach
</div>

