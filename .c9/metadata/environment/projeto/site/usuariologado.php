{"filter":false,"title":"usuariologado.php","tooltip":"/projeto/site/usuariologado.php","undoManager":{"mark":28,"position":28,"stack":[[{"start":{"row":0,"column":0},"end":{"row":36,"column":9},"action":"insert","lines":["<form name=\"frmCadAluno\" id=\"frmCadAluno\" method=\"post\"  action=\"inclusaoaluno.php\" onSubmit=\"return validaCampoUsuario();\">","\t\t\t<label for=\"campoNome\">\t       ","\t\t\t\tNome: <input type=\"text\" name=\"campoNome\" id=\"campoNome\" placeholder=\"Informe o nome\" required />","\t\t\t</label>","\t\t\t<label for=\"campoEndereco\">","\t\t\t\tEndereço: <input type=\"text\" name=\"campoEndereco\" id=\"campoEndereco\" placeholder=\"Informe o Endereço\" required />","\t\t\t</label>\t\t\t","\t\t\t<label for=\"campoCidade\">","\t\t\t\tCidade: <input type=\"text\" name=\"campoCidade\" id=\"campoCidade\" placeholder=\"Informe a cidade\" required />","\t\t\t</label>\t\t\t","\t\t\t<label for=\"campoUf\">","\t\t\t\tUf: ","\t\t\t\t  <select name=\"cbEstado\" id=\"cbEstado\">","\t\t\t\t\t<option value = \"0\">Selecione o estado</option>","\t\t\t\t\t<option value = \"sc\">Santa Catarina</option>","\t\t\t\t\t<option value = \"pr\">Paraná</option>","\t\t\t\t\t<option value = \"sp\">São Paulo</option>","\t\t\t\t\t<option value = \"rj\">Rio de Janeiro</option>","\t\t\t\t\t<option value = \"rs\">Rio Grande do Sul</option>","\t\t\t\t\t<option value = \"ce\">Ceará'</option>","\t\t\t\t </select>","\t\t\t</label>","\t\t\t","\t\t\t<label for=\"campoEmail\">","\t\t\t\te-mail:<input type=\"text\" name=\"campoEmail\" id=\"campoEmail\" placeholder=\"Informe o e-mail\" required />","\t\t\t</label>","","\t\t\t<label for=\"campoCpf\">","\t\t\t\tNr cpf:<input type=\"text\" name=\"campoCpf\" id=\"campoCpf\" placeholder=\"Informe o nr do cpf\" required />","\t\t\t</label>","\t\t\t<label for=\"campoCelular\">","\t\t\t\tNr Celular:<input type=\"text\" name=\"campoCelular\" id=\"campoCelular\" placeholder=\"Informe o nr celular\" required/>","\t\t\t</label>\t","\t\t\t","\t\t\t<input type=\"submit\" value=\"Cadastrar\" id=\"botao_cadastrar\"/>","\t\t\t<input type =\"reset\" value=\"Limpar\" id=\"botao_cadastrar\"/>","\t\t</form>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":10},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        ","        ","    </head>","    <body>"],"id":3}],[{"start":{"row":43,"column":9},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":44,"column":0},"end":{"row":44,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":44,"column":1},"end":{"row":44,"column":2},"action":"remove","lines":["\t"],"id":5},{"start":{"row":44,"column":0},"end":{"row":44,"column":1},"action":"remove","lines":["\t"]}],[{"start":{"row":44,"column":0},"end":{"row":45,"column":6},"action":"insert","lines":[" </body>","<html>"],"id":6}],[{"start":{"row":3,"column":8},"end":{"row":3,"column":66},"action":"insert","lines":["<link href=\"estilo.css\" rel=\"stylesheet\" type=\"text/css\"/>"],"id":7}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":8},"action":"remove","lines":["    "],"id":8},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["    "]},{"start":{"row":3,"column":66},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":3,"column":20},"end":{"row":3,"column":26},"action":"remove","lines":["estilo"],"id":9},{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["s"]},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["t"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["y"]},{"start":{"row":3,"column":23},"end":{"row":3,"column":24},"action":"insert","lines":["l"]},{"start":{"row":3,"column":24},"end":{"row":3,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":10},"end":{"row":6,"column":8},"action":"insert","lines":["","        "],"id":10}],[{"start":{"row":6,"column":8},"end":{"row":8,"column":2},"action":"insert","lines":["<?php","  include'menu.php';","?>"],"id":11}],[{"start":{"row":7,"column":2},"end":{"row":7,"column":4},"action":"insert","lines":["  "],"id":13}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":8},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":12},"action":"insert","lines":["    "],"id":15}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":16}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"insert","lines":["    "],"id":17}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":18}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"insert","lines":["    "],"id":19}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["-"],"id":20},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["l"]},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["o"]},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["a"]},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["d"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["o"]}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"remove","lines":["o"],"id":21},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"remove","lines":["d"]},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["a"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["g"],"id":22},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["a"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["d"]},{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["o"]}],[{"start":{"row":8,"column":10},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":24},"action":"insert","lines":["<div id=\"login\">"],"id":25}],[{"start":{"row":46,"column":9},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":47,"column":0},"end":{"row":47,"column":2},"action":"insert","lines":["\t\t"]},{"start":{"row":47,"column":2},"end":{"row":47,"column":3},"action":"insert","lines":["<"]},{"start":{"row":47,"column":3},"end":{"row":47,"column":4},"action":"insert","lines":[">"]}],[{"start":{"row":47,"column":3},"end":{"row":47,"column":4},"action":"insert","lines":["/"],"id":27},{"start":{"row":47,"column":4},"end":{"row":47,"column":5},"action":"insert","lines":["d"]},{"start":{"row":47,"column":5},"end":{"row":47,"column":6},"action":"insert","lines":["i"]},{"start":{"row":47,"column":6},"end":{"row":47,"column":7},"action":"insert","lines":["v"]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":24},"action":"remove","lines":["<div id=\"login\">"],"id":28},{"start":{"row":9,"column":8},"end":{"row":14,"column":22},"action":"insert","lines":["<div class=\"container\" >","    <a class=\"links\" id=\"paracadastro\"></a>","    <a class=\"links\" id=\"paralogin\"></a>","    <div class=\"content\">      ","      <!--FORMULÁRIO DE LOGIN-->","      <div id=\"login\">"]}],[{"start":{"row":52,"column":2},"end":{"row":52,"column":8},"action":"remove","lines":["</div>"],"id":29},{"start":{"row":52,"column":2},"end":{"row":54,"column":9},"action":"insert","lines":[" </div>","    </div>","  </div> "]}],[{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["c"],"id":31},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["s"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["s"]}],[{"start":{"row":3,"column":23},"end":{"row":3,"column":24},"action":"insert","lines":["/"],"id":32}]]},"ace":{"folds":[],"scrolltop":105.5,"scrollleft":0,"selection":{"start":{"row":3,"column":8},"end":{"row":3,"column":69},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1587230972747,"hash":"c2da07c6e1ce2c0890626c7c06644245eac26afa"}