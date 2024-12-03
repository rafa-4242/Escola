import tkinter as tk
from tkinter import messagebox

def inserir_dados():
    messagebox.showinfo("Sucesso", "DADOS INSERIDOS COM SUCESSO")

def selecionar_dados():
    messagebox.showinfo("Sucesso", "DADOS SELECIONADOS COM SUCESSO")

# Funções para os botões
def adicionar():
    roota = tk.Tk()
    roota.title("Adicionar Colégio")
    roota.geometry("400x200")
    roota.configure(bg="white")

    # Rótulo explicativo
    label_explicativo = tk.Label(roota, text="Por favor, insira o nome do colégio:", bg="white")
    label_explicativo.pack(pady=5)
    # Campo de entrada
    entry1 = tk.Entry(roota)
    entry1.pack()

    # Botão de inserir
    btn_inserir = tk.Button(roota, text="Inserir", command=inserir_dados, bg="lightblue", fg="white", padx=10, pady=5)
    btn_inserir.pack(pady=10)
   
    #CODIGO QUE VOCÊS CONHECEM PARA INSERIR O DADO NO BANCO DE DADOS
   
def selecionar():
    selecionar_dados()

# Criando a janela principal
root = tk.Tk()
root.title("CAF")
root.geometry("800x450")
root.configure(bg="white")

# Criando um objeto Menu
menu_principal = tk.Menu(root)
root.config(menu=menu_principal)

# Criando um menu 'Arquivo' com opções
menu_arquivo = tk.Menu(menu_principal, tearoff=0)
menu_arquivo.add_command(label="Adicionar Dados", command=adicionar)
menu_arquivo.add_command(label="Selecionar Dados", command=selecionar)

# Adicionando o menu 'Arquivo' ao menu principal
menu_principal.add_cascade(label="Arquivo", menu=menu_arquivo)


# Loop principal da janela
root.mainloop()