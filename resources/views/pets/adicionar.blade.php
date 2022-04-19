Adicionar novo pet:

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <select name="color" id="color">
        <option value="Azul">Azul</option>
        <option value="Branco">Branco</option>
        <option value="Preto">Preto</option>
        <option value="Amarelo">Amarelo</option>
        <option value="Marrom">Marrom</option>
        <option value="Vermelho">Vermelho</option>
        <option value="Cinza">Cinza</option>
        <option value="Bege">Bege</option>
        <option value="Laranja">Laranja</option>
        <option value="Roxo">Roxo</option>
    </select> <br/>

    <label for="specie">Especie</label>
    <select name="specie" id="specie">
        <option value="Gato">Gato</option>
        <option value="Cachorro">Cachorro</option>
        <option value="Tartaruga">Tartaruga</option>
        <option value="Papagaio">Papagaio</option>
        <option value="Pokemon">Pokemon</option>
        <option value="Peixe">Peixe</option>
        <option value="Cavalo">Cavalo</option>
        <option value="Camaleao">Camaleao</option>
        <option value="Dragão de Komodo">Dragão de Komodo</option>
        <option value="Zebra">Zebra</option>
        <option value="Coelho">Coelho</option>
        <option value="Cobra">Cobra</option>
    </select> <br/>

    <label for="size">Size</label>
    <select name="size" id="size">
        <option value="XS">XS</option>
        <option value="SM">SM</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select>

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
