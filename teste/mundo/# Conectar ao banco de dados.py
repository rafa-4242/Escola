# Conectar ao banco de dados
conn = mysql.connector.connect(
host="seu_host",
user="seu_usuario",
password="sua_senha",
database="seu_banco_de_dados"
)

#Query SQL para inserção
query = "INSERT INTO tabela (nome, idade) VALUES (%s, %s)"

# Executar a inserção para cada conjunto de dados
cursor.execute(query, (nome1, idade1))
cursor.execute(query, (nome2, idade2))
cursor.execute(query, (nome3, idade3))