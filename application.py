import tkinter as tk
from PIL import Image, ImageTk
import mysql.connector
import webbrowser

def create_connection():
    conn = mysql.connector.connect(
        host="localhost",
        username="root",
        password="mypassword",
        database="hackathon"
    )
    return conn

def insert_data(cursor, data):
    cursor.execute("""INSERT INTO userlogin (name, IC, address, telephone, emergency_call, email)
                      VALUES (%s, %s, %s, %s, %s, %s)""", data)

def check_input(name_entry, IC_entry, tele_entry, ec_entry, address_entry, email_entry):
    if not name_entry.replace(" ", "").isalpha():
        show_error("Invalid Name. Please Try Again.")
        return False
    
    if not IC_entry.isdigit() or len(IC_entry) != 12:
        show_error("Invalid IC Number. Please enter a valid IC Number.")
        return False

    if not tele_entry.isdigit() or len(tele_entry) != 10:
        show_error("Invalid Telephone Number. Please enter a valid Telephone Number.")
        return False
    
    if not ec_entry.isdigit() or len(ec_entry) != 10:
        show_error("Invalid Emergency Telephone Number. Please enter a valid Emergency Telephone Number.")
        return False
    
    if not address_entry.replace(" ", "").replace(",", "").replace(".", "").isalnum():
        show_error("Invalid Address. Please Try Again.")
        return False

    
    if "@" not in email_entry or "." not in email_entry:
        show_error("Invalid Email Address. Please Try Again.")
        return False
    
    return True

def show_error(message):
    error_window = tk.Toplevel(app)
    error_window.title("Error")
    error_window.geometry("400x300")
    error_label = tk.Label(error_window, text=message, font=("Helvetica", 12))
    error_label.pack(padx=10, pady=10)

def on_submit():
    name = entry_name.get()
    IC = entry_IC.get()
    address = entry_address.get()
    tele = entry_tele.get()
    ec = entry_ec.get()
    email = entry_email.get()

    if not all((name, IC, address, tele, ec, email)):
        show_error("Please fill in all the fields.")
        return

    if not check_input(name, IC, tele, ec, address, email):
        return
    
    try:
        IC = int(IC)
        tele = int(tele)
        ec = int(ec)
    except ValueError:
        show_error("Invalid Input. Please enter valid numbers for IC, Telephone Number, and Emergency Telephone Number.")
        return

    conn = create_connection()
    cursor = conn.cursor()

    insert_data(cursor, (name, IC, address, tele, ec, email))

    conn.commit()
    conn.close()

    entry_name.delete(0, tk.END)
    entry_IC.delete(0, tk.END)
    entry_address.delete(0, tk.END)
    entry_tele.delete(0, tk.END)
    entry_ec.delete(0, tk.END)
    entry_email.delete(0, tk.END)

    url = 'http://localhost/Hackathon/chatWindow.php'
    webbrowser.open_new(url)

def load_background_image():
    bg_image = Image.open("medical.jpg")
    bg_image = bg_image.resize((500, 400))
    global bg_photo
    bg_photo = ImageTk.PhotoImage(bg_image)
    canvas = tk.Canvas(app, width=500, height=400)
    canvas.pack(fill="both", expand=True)
    canvas.create_image(0, 0, image=bg_photo, anchor="nw")

app = tk.Tk()
app.title("Hospital Emergency App")
app.geometry("500x400")

load_background_image()

# Adjusting label to appear in the middle
middle_frame = tk.Frame(app, bg="white")
middle_frame.place(relx=0.5, rely=0.5, anchor=tk.CENTER)

text_label = tk.Label(middle_frame, text="Enter your Name:", font=("Helvetica", 12))
text_label.pack()
entry_name = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_name.pack()

label = tk.Label(middle_frame, text="Enter your IC Number:", font=("Helvetica", 12))
label.pack()

entry_IC = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_IC.pack()

label = tk.Label(middle_frame, text="Enter your address:", font=("Helvetica", 12))
label.pack()

entry_address = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_address.pack()

label = tk.Label(middle_frame, text="Enter your Telephone Number:", font=("Helvetica", 12))
label.pack()

entry_tele = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_tele.pack()

label = tk.Label(middle_frame, text="Enter your Emergency Telephone Number:", font=("Helvetica", 12))
label.pack()

entry_ec = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_ec.pack()

label = tk.Label(middle_frame, text="Enter your email:", font=("Helvetica", 12))
label.pack()

entry_email = tk.Entry(middle_frame, font=("Helvetica", 12))
entry_email.pack()

submit_button = tk.Button(middle_frame, text="Log In", command=on_submit)
submit_button.pack()

app.mainloop()