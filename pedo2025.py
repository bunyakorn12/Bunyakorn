import tkinter as tk
root = tk.Tk()
root.title("LFC")

myiabel = tk.Label(text="Hello", fg="black", font="49").pack()

def showMessage():
    tk.Label(text="ชื่อ: นายบุณยกร เแลิมพรววิทิต\nชั้น: ม.5/8\n เลขที่: 12", fg="blue", font="56").pack()
    
btn1 = tk.Button(root, text="Press Me!", commant=showMessage).pack()

root.geometry("469x469")
root.mainloop()