1. Install Git and VS Code
2. Create a GitHub account

Follow A or B below:

## A. Already has remote repository in Github and no local repository folder

3. Start VS Code, click on Explorer icon (top left)

4. Select Clone Repository

5. Enter full URL of Github repository(must be root repository) eg. https://github.com/username/reponame

6. Select local folder to save repository

7. VS Code with redirect to github login on browser

8. Login to github on browser(if already logged in, browser may show local host error - this is OK, just return to VS Code)

9. Remote repository will be saved to local folder and changes will be tracked



## B. No file in remote repository in Gitub but added files to local repository folder

3. Start VS Code, click on Explorer icon (top left)

4. Select Open Folder and choose the local repository folder

5. Click "Yes, I trust the authors"

6. Click Source Control icon (third icon on left)

7. Select Initialize Repository

8. Click on "..." after SOURCE CONTROL, select "Branch", then "Rename Branch..."

9. Rename "master" to "main"

10. Click on "..." after SOURCE CONTROL, select "Remote", then "Add Remote..."

11. Enter full URL of Github repository(must be root repository) eg. https://github.com/username/reponame

12. Enter a name for the repository (can be different from the folder name)

13. Click on "Terminal" on the top menu bar, open a new terminal

14. In the terminal, enter the following commands:

> git config --global user.name "username" (your github user name)

> git config --global user.email "email" (your github user email)

15. Enter "exit" to close the terminal

16. Hover over "Changes" in the left menu and click on "+"

17. Type a comment (cannot be blank) in the box with "Message (Ctrl+Enter to commit on'main')"

18. Click the "tick" icon, then click on "Publish the branch"

19. The local repository is saved to the remote repository on github and changes will be tracked


## After completing new coding:

a. Click on Source Control icon (third icon on left)

b. Hover over "Changes" in the left menu and click on "+"

c. Type a comment (cannot be blank) in the box with "Message (Ctrl+Enter to commit on'main')"

d. Click the "tick" icon, then click on "Sync Changes" and click "OK" when prompted

Note: you will need to execute "pull" first if there are changes in the remote repository that are newer than the local ones

e. The local repository is updated to the remote repository on github
