import mysql.connector 

# Conectar ao banco de dados
conn = mysql.connector.connect(
host="seu_host",
user="seu_usuario",
password="sua_senha",
database="seu_banco_de_dados"
)

# Criar um cursor
cursor = conn.cursor()
print("Digite o nome do colégio:")
colegio=input()
print("Digite o id do colégio:")
idcolegio=int(input())
# Executar uma consulta SQL para selecionar apenas os campos nome e idade
cursor.execute("insert into colegio(idcolegio,nomecolegio) values(?,?)", idcolegio,colegio)
print("SEUS DADOS FORAM INSERIDOS COM SUCESSO|")




# Fechar a conexão
conn.close()