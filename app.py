from flask import Flask,render_template,url_for,redirect,Response,request
import pyaudio
import wave
import os

app = Flask(__name__)

@app.route("/",methods=['GET','POST'])
def home():
	return render_template('index.php')

@app.route("/playcurrent",methods=['GET','POST'])
def playcurrent(RECORD_SECONDS=16): 
	x=request.form["name"]
	fname=""
	f1=""
	CHUNK=1024
	FORMAT=pyaudio.paInt16
	CHANNELS=1
	RATE=44100
	i=1
	while(True):
		fname="static/"+x+str(i)+".wav"
		f1=x+str(i)+".wav"
		if os.path.isfile(fname):
			i+=1
		else:
			break
	fname="static/"+x+str(i)+".wav"
	INPUT_DEVICE_INDEX=0

	p=pyaudio.PyAudio()

	stream=p.open(format=FORMAT,channels=CHANNELS,rate=RATE,input=True,frames_per_buffer=CHUNK,input_device_index=INPUT_DEVICE_INDEX)

	print("* recording")

	frames=[]

	for i in range(0, int(RATE/CHUNK*int(RECORD_SECONDS))):
	    data=stream.read(CHUNK)
	    frames.append(data)

	print("* done recording")

	stream.stop_stream()
	stream.close()
	p.terminate()

	wf=wave.open(fname, 'wb')
	wf.setnchannels(CHANNELS)
	wf.setsampwidth(p.get_sample_size(FORMAT))
	wf.setframerate(RATE)
	wf.writeframes(b''.join(frames))
	wf.close()
	i+=1
	return render_template('current.html',file=f1)

@app.route("/move",methods=['GET','POST'])
def move():
	files = os.listdir('static')
	return render_template('view.html',files=files)