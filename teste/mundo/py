import mysql.connector

conexao = mysql.connector.connect(
host="localhost",
user="root",
password="masterkey",
database="livroponto"
)

def inserirdados():

cursor = conexao.cursor()
print("Digite o nome do colégio:")
NOME_COLEGIO=input()
print("Digite o valor do registro:")
ID_COLEGIO=int(input())

query="insert into COLEGIO(NOME_COLEGIO, ID_COLEGIO) values(%s,%s)"
cursor.execute(query, (NOME_COLEGIO, ID_COLEGIO))
print("SEUS DADOS FORAM INSERIDOS COM SUCESSO|")


def selecionardados():
cursor=conexao.cursor()
cursor.execute("SELECT NOME_COLEGIO FROM COLEGIO")
resultados=cursor.fetchall()
for resultado in resultados:
nomecolegio=resultado
print("NOME_COLEGIO:", nomecolegio)
print("sucesso")
resposta2='s'
while(resposta2=='s'):
print("Digite uma opção do sistema")
print("DIgite 1 para adicionar dados")
print("Digite 2 para selecionar dados")
resposta=int(input())
if(resposta==1):
inserirdados()
if(resposta==2):
selecionardados()
print("Deseja voltar para tela inicial?")
resposta2=input()