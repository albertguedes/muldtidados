$(function() {
    $(".dashboard-stat > .more").click(function(e) {
        e.preventDefault();
        setTableColor($(this));
        loadData($(this));
    });
});

function setTableColor(link) {
  var parent = link.closest('.dashboard-stat');
  var parentColor = parent.css('background-color');
  $('.portlet').removeClass('grey').css('background-color', parentColor);
}

function loadData(link) {
    var desc = link.closest('.dashboard-stat').find('.desc').text();
    var type = desc.trim().toLowerCase();
    var uri = "http://localhost:8081/api/data.php";

    $.post(uri, { type: type })
        .done(function(resposta) {
            var data = resposta.data;
            switch(type) {
                case 'clientes':
                    loadClientesDataOnTable(data);
                    break;
                case 'fornecedores':
                    loadFornecedoresDataOnTable(data);
                    break;
                case 'usuários':
                    loadUsuariosDataOnTable(data);
                    break;
            }
        })
        .fail(function(xhr, status, error) {
            console.error('❌ Erro:', xhr.responseText || status, error);
        });
}

function loadClientesDataOnTable(data){
    /**
    [
        'nome' => 'Mendel',
        'cpf' => '555.333.888-77',
        'endereco' => 'Rua Veiga',
        'telefone' => '(11) 98654-3333',
        'email' => 'm@multidadosti.com.br'
    ] */

    var table = $(".portlet-body .table");
    var tableHead = table.find("thead");
    var tableBody = table.find("tbody");

    tableHead.empty();
    var row = '<tr>';
    row += '<th>Nome</th>';
    row += '<th>CPF</th>';
    row += '<th>Endereço</th>';
    row += '<th>Telefone</th>';
    row += '<th>Email</th>';
    row += '</tr>';
    tableHead.append(row);

    tableBody.empty();
    for( var i = 0; i < data.length; i++ ) {
        var d = data[i];
        console.log(d);
        var row = '<tr>';
        row += '<td>' + d['nome'] + '</td>';
        row += '<td>' + d['cpf'] + '</td>';
        row += '<td>' + d['endereco'] + '</td>';
        row += '<td>' + d['telefone'] + '</td>';
        row += '<td>' + d['email'] + '</td>';
        row += '</tr>';
        tableBody.append(row);
    }
}

function loadFornecedoresDataOnTable(data){
    /**
    [
        'nome' => 'Moisés',
        'cpf' => '111.111.111-11',
        'cidade' => 'São Paulo',
        'email' => 'm@gmail.com'
    ] */

    var table = $(".portlet-body .table");
    var tableHead = table.find("thead");
    var tableBody = table.find("tbody");

    tableHead.empty();
    var row = '<tr>';
    row += '<th>Nome</th>';
    row += '<th>CPF</th>';
    row += '<th>Cidade</th>';
    row += '<th>Email</th>';
    row += '</tr>';
    tableHead.append(row);

    tableBody.empty();
    for( var i = 0; i < data.length; i++ ) {
        var d = data[i];
        row = '<tr>';
        row += '<td>' + d['nome'] + '</td>';
        row += '<td>' + d['cpf'] + '</td>';
        row += '<td>' + d['cidade'] + '</td>';
        row += '<td>' + d['email'] + '</td>';
        row += '</tr>';
        tableBody.append(row);
    }
}

function loadUsuariosDataOnTable(data){
    /**
    [
        'nome' => 'Souza',
        'cpf' => '777.777.777-77',
        'endereco' => 'Rua Agostinho',
        'telefone' => '(11) 92222-3333',
        'usuario' => 'souza'
    ] */    

    var table = $(".portlet-body .table");
    var tableHead = table.find("thead");
    var tableBody = table.find("tbody");

    tableHead.empty();
    var row = '<tr>';
    row += '<th>Nome</th>';
    row += '<th>CPF</th>';
    row += '<th>Endereço</th>';
    row += '<th>Telefone</th>';
    row += '<th>Email</th>';
    row += '</tr>';
    tableHead.append(row);     

    tableBody.empty();
    for( var i = 0; i < data.length; i++ ) {
        var d = data[i];
        row = '<tr>';
        row += '<td>' + d['nome'] + '</td>';
        row += '<td>' + d['cpf'] + '</td>';
        row += '<td>' + d['endereco'] + '</td>';
        row += '<td>' + d['telefone'] + '</td>';
        row += '<td>' + d['email'] + '</td>';
        row += '</tr>';
        tableBody.append(row);
    }
}   
