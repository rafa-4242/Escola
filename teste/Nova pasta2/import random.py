import random
escolha=0
numero=10000
while(escolha!=numero):
    numero=random.randint(1,100)
    print("Digite o numero para verificar")
    escolha=int(input())
    if(escolha==numero):
        print("VOCE ACERTOU")
    else:
        print("VOCE ERROU :")    
        print(numero)
    print("FIM")    