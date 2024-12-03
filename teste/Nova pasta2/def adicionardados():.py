def adicionardados():
    print("ADICIONADO COM SUCESSO")

def BUSCARDADOS():
    print("DADOS BUSCADOS COM SUCESSO")
resposta2='s'
while(resposta2=='s'):
    print("Digite uma opção do sistema:")
    print("Digite 1 para adcionar dados")
    print("Digite 2 para buscar dados")
    resposta=int(input())
    if(resposta==1):
        adicionardados()
    if(resposta==2):
        BUSCARDADOS()
    print("Você deseja voltar ao menu principal")        
    resposta2=input()