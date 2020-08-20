import telegram
#token that can be generated talking with @BotFather on telegram
my_token = '1324013282:AAHHB8GkrDELu8L_n0ZzXGCiirK8d2kziKk'



def send(msg, chat_id, token=my_token):
	"""
	Send a mensage to a telegram user specified on chatId
	chat_id must be a number!
	""" 
	bot = telegram.Bot(token=my_token)
	bot.sendMessage(chat_id='-4146408',text="Hello test")
