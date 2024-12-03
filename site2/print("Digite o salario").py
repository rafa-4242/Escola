print("Digite o salario")
salario=float(input())
if(salario<=200):
   aumento=(salario*0,20)
   qprocetagem="20%"
if(salario>=281 and salario<=700):
   aumento=(salario*0,15)
   qprocentagem="15%"
if(salario>=701 and salario<=1500):
  aumento=(salario*0,10)
  qprocentagem="10"
if(salario>=1500):
    aumento=(salario*0,5)
  qprocentagem="5"
novosalario=saalario+aumento
print(salario)
print(qprocentagem)
print(aumento)
print(novosalario)