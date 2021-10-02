<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><SPAN ID=isee1 STYLE=position:absolute;width:0px;height:0px;top:-5px;visibility:hidden><IMG SRC=http://a0.martinsimoveis-com.hst.isee1.net/ WIDTH=1 HEIGHT=1 BORDER=0></SPAN>
<%
'# Cria um objeto de conexão com o banco de dados
 Set Conexao = Server.CreateObject("ADODB.Connection")

'# abre a conexão com o banco de dados especificado<br>
Conexao.Open "DBQ="& Server.MapPath("imoveis.mdb")&";Driver={Microsoft Access Driver (*.mdb)};"
%>

<%
      ComandoSQL = "SELECT * FROM busca" 
      Set bd = Conexao.Execute(ComandoSQL)
     
        While Not bd.EOF
      %>
Código <%=bd("codigo")%> <br>
<img src="imagens/foto/casa/mini/<%=bd("imagen")%>"><br>
<%=bd("descricao")%><br>


		<%
          bd.MoveNext
        Wend
      %>

</body>
</html>
