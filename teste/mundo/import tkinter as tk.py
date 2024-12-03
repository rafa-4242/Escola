import tkinter as tk
from PIL import ImageTk, Image

root = tk.Tk()

# Carregar a imagem
image = Image.open("example.jpg")
photo = ImageTk.PhotoImage(image)

# Adicionar a imagem a um widget Label
label = tk.Label(root, image=photo)
label.pack()

root.mainloop()