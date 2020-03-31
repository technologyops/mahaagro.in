#!/usr/bin/env python

# Gmail SMTP script by joon

# Snippets from the following codes were used:

#  http://www.go4expert.com/forums/showthread.php?t=7567

#  http://docs.python.org/library/email-examples.html?highlight=sendmail

#  http://djkaos.wordpress.com/2009/04/08/python-gmail-smtp-send-email-script/



import smtplib

from email.mime.text import MIMEText



import cgi



print "Content-type: text/html \n\n"



form = cgi.FieldStorage()

userName = form["username"].value

email = form["email"].value

company = form["company"].value

contact = form["contactno"].value

address = form["address"].value

message = form["message"].value



print  "Hai %s, your Email Sent Successfully..." % userName



sender = email

recipients = 'pandi@mahaagro.in'



uname = "Name:" + userName + "\nEmail:" + email + "\nCompany:" + company + "\nContact No:" + contact + "\nAddress:" + address + "\nMessage:" + message 



msg = MIMEText(uname)

msg['Subject'] =  'Email From mahaagro.in'

msg['From'] = sender

msg['To'] = recipients



smtpserver = 'smtp.gmail.com'

smtpuser = email         # set SMTP username here

smtppass = 'ihtnayaj'   # set SMTP password here



session = smtplib.SMTP("smtp.gmail.com", 587)

session.ehlo()

session.starttls()

session.ehlo()



session.login(smtpuser, smtppass)



smtpresult = session.sendmail(sender, [recipients], msg.as_string())



if smtpresult:

  errstr = ""

  for recip in smtpresult.keys():

      errstr = """Could not delivery mail to: %s



Server said: %s

%s



%s""" % (recip, smtpresult[recip][0], smtpresult[recip][1], errstr)

  raise smtplib.SMTPException, errstr



session.close()

