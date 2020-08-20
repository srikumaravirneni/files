
import nltk;
from nltk.corpus import stopwords
from nltk.tokenize import sent_tokenize, word_tokenize
 
stop_words = set(stopwords.words('english'))

txt=''' [02/07, 9:48 AM] Rk Sastry: Can you imran. Srikumar, abhi.  Update me status. 
[02/07, 9:49 AM] srikumar C/O Srinivas: Sir textbook files are very big it is difficult to upload
[02/07, 9:51 AM] srikumar C/O Srinivas: Yes sir
[02/07, 9:51 AM] srikumar C/O Srinivas: Each chaptrr is also very big sir
[02/07, 9:51 AM] srikumar C/O Srinivas: Minimum 20mb
[02/07, 9:52 AM] Rk Sastry: Omg... Can you share one chapter link in science.
[02/07, 9:53 AM] Abhilash Plum: Sir chapter also big size above 15mb... Tried to  compress file size but below 10mb it's not compressing...
[04/07, 10:19 PM] Rk Sastry: Now iit ropar demo Tuesday. PlumEdu... We must check once.
[05/07, 11:04 AM] Rk Sastry: May be this syllabus has units also and objectives which I entered course CSL 106
 [05/07, 11:34 AM] Rk Sastry: Form Gap : Programs

Gap identified : Program elements ares same as course elements that is a mistake see drop down. It must be

1. Entry requirements
2. Grading system
3. Career avenues

May be we are showing the same form here.

Recommendations : Please replicate abnd change
[05/07, 8:23 PM] Rk Sastry: Programme Outcomes are narrow statements that describe what the students are expected to know and would be able to do upon the graduation. These relate to the skills, knowledge, and behaviour that students acquire through the programme.

The programme outcomes adopted by NBA for accreditation of programmes are based on initial capabilities, competence, skills, etc. These parameters are called Graduates Attributes and they vary from discipline to discipline and level to level.

Course Outcomes are narrower statements that describe what students are expected to know, and be able to do at the end of each course/subject. While the POs define the departmental outcomes, the COs are more oriented towards the subjects and are mostly defined by the faculties consulting higher authorities. The COs are more like statements that relate to the skills, knowledge, and behaviour the students acquire as they go through a specific course within a program. They collectively contribute to the program outcomes. They are to be mapped to the POs, and not necessarily to a single one.

Two or more COs can be mapped to a PO and a CO can be mapped to one or more PO(s). COs are mapped to different POs based on their influence on them.

Program Educational Objectives (PEOs)

The educational objectives of an engineering degree program are the statements that describe the expected achievements of graduates in their career, and what the graduates are expected to perform and achieve during the first few years after graduation.
Program Educational Objectives Essentially Answer the Question: Why does the Program exist in the first place?
PEOs are:

Statement of areas or fields where the graduates find employment
Preparedness of graduates to take up higher studies
Program Specific Outcomes (PSOs)

These are what the students should be able to do at the time of graduation. The PSOs are program specific. PSOs are written by the department offering the program. There usually are two to four PSOs for a department.

Program Specific Outcomes (PSOs) are decided by the head of the institution with the help of HoDs and department experts.
[06/07, 8:59 AM] Rk Sastry: Pavani.. I sent a message mail on mind map correctiins
[06/07, 9:00 AM] Rk Sastry: Imran.  We have to do book report.  I will explain.  Most work is completed.
[06/07, 9:03 AM] Rk Sastry: Imran. Pavan... Please write daily work in some places as told by madam
[06/07, 9:08 AM] Rk Sastry: We have to try slide maker in process chart... Who ever free will discuss
[06/07, 9:11 AM] Rk Sastry: This is for NAB accreditation
[06/07, 9:11 AM] Rk Sastry: Imran... See this
[06/07, 10:01 AM] Abhilash Plum: Sir, imran has some power issue itseams...
[06/07, 10:02 AM] Abhilash Plum: Internet not working  '''


a=(txt.split('\n'))


for i in range(len(a)):
 
  v=a[i]
  vArr=(v.split('.'))
  for j in range(len(vArr)):
         print(j,vArr[j])






list2=['job','chore','errand','quest','complete','do','finish','call','meet','give','take','send','go','come','please','update']



  
      
'''


list1= [x.lower() for x in Words] 

list2=['job','chore','errand','quest','complete','do','finish','call','meet','give','take','send','go','come','please','update']


check =  any(item in list1 for item in list2)

if check is True:
    print("There is some task assigned in the sentence","      -      ",txt,"        ")    
else :
    print("There is no task assigned in the sentence","      -      ",txt,"         ")
 '''  
	
	    
