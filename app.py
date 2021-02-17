from flask import Flask,render_template,url_for,redirect,Response,request
import os
import sounddevice as sd
from scipy.io.wavfile import write

app = Flask(__name__)

@app.route("/",methods=['GET','POST'])
def home():
	return render_template('index.php')

@app.route("/playcurrent",methods=['GET','POST'])
def playcurrent(RECORD_SECONDS=16): 
	x=request.form["name"]
	i=1
	f1=x+str(i)+".wav"
	fs = 44100
	seconds = 15
	myrecording = sd.rec(int(seconds * fs), samplerate=fs, channels=1)
	sd.wait()  # Wait until recording is finished
	write("static/"+x+str(i)+".wav", fs, myrecording)
	i+=1
	return render_template('current.html',file=f1)

@app.route("/move",methods=['GET','POST'])
def move():
	files = os.listdir('static')
	return render_template('view.html',files=files)