print("SEUS DADOS FORAM INSERIDOS COM SUCESSO|")


def selecionardados():
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

modelo:
import tkinter as tk

def ok_click():
    print("OK button clicked")

def cancel_click():
    print("Cancel button clicked")
    root.destroy()

root = tk.Tk()
root.title("Exemplo Tkinter")

# Definindo os campos de entrada
entry1 = tk.Entry(root)
entry1.pack()

entry2 = tk.Entry(root)
entry2.pack()

# Definindo os botões
ok_button = tk.Button(root, text="OK", command=ok_click)
ok_button.pack(side=tk.LEFT)

cancel_button = tk.Button(root, text="Cancelar", command=cancel_click)
cancel_button.pack(side=tk.RIGHT)

root.mainloop()