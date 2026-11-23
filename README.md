# WEB PROJECT
This repo contains a files that related to the project of the Course Web Applications Development 

## IDEA
Web application for students use to explore academic paths with suggested roadmaps and courses   

## METHODS 
### Combination of web technologies:
- **PHP**: Server-side logic and database management
- **JavaScript**: Client-side logic and UI features
- **CSS & Html**: Page structure and user interface styling

  
## STRUCTURE 

```
Web-Project/
├── css/                    # Styles
│   └── style.css           # The style of UI (all pages)
├── database/               # SQLite database of roadmaps and courses
│   ├── roadmaps.sql        # Tables + data (readable)
│   └── roadmaps.db         # The database file PHP reads
├── images/                 # Icons and images
│   ├── icon.svg            # Browser tab icon
│   ├── image.svg           # Sidebar logo
│   ├── IT.png              # IT roadmap card
│   ├── CS.png              # CS roadmap card
│   ├── DS.png              # Data Science roadmap card
│   └── cyber-security.png  # Cyber Security roadmap card
├── includes/               # For static elements such as sidebar
│   └── sidebar.php         # Left menu shown on every page
├── js/                     # Logic and programs for the UI
│   └── app.js              # JavaScript (empty for now)
├── pages/                  # Pages for different use
│   ├── home.php            # Home page (?page=home)
│   ├── page1.php           # Roadmaps cards (?page=roadmaps)
│   ├── page2.php           # Roadmap path of courses from the database (?page=roadmap-details)
│   ├── page3.php           # Courses (?page=courses)
│   └── page4.php           # Info page (?page=info)
├── index.php               # Main layout shell for dynamic pages
└── README.md               # Documentation
```


