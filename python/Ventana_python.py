
__Autor__ = "Camilo Mamian"

import tkinter as tk


	
class Application(tk.Frame):
    def __init__(self, master=None):
        super().__init__(master)
        self.master = master
        self.pack()
        self.create_widgets()

    def create_widgets(self):
        self.hi_there1 = tk.Button(self)
        self.hi_there2 = tk.Button(self)
        self.hi_there3 = tk.Button(self)
        self.hi_there = tk.Button(self)

        self.hi_there["text"] = "Saludame (Has click)\n"
        self.hi_there["command"] = self.say_hi
        self.hi_there.pack(side="top")

        self.hi_there1["text"] = "Despidete\n"
        self.hi_there1["command"] = self.say_hi1
        self.hi_there1.pack(side="top")

        self.hi_there2["text"] = "Saludame (Has click)\n"
        self.hi_there2["command"] = self.say_hi2
        self.hi_there2.pack(side="top")


        self.hi_there3["text"] = "Saludame (Has click)\n"
        self.hi_there3["command"] = self.say_hi3
        self.hi_there3.pack(side="top")

        self.quit = tk.Button(self, text="QUIT", fg="green", command=self.master.destroy)
        self.quit.pack(side="bottom")

    def say_hi(self): print("¡Muy buenos dias!")
    def say_hi1(self): print("¡Muy buenos dias! 1")
    def say_hi2(self): print("¡Muy buenos dias! 2")
    def say_hi3(self): print("¡Muy buenos dias! 3")

root = tk.Tk()

root.geometry("600x200")
root.title("Camilo Mamian")

app = Application(master=root)
app.mainloop()