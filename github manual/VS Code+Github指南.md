# 連接 VS Code 和 Github

1. 安裝 Git 和 VS 代碼

2. 創建一個 GitHub 帳戶

按情況執行下面A或B：

## A. Github中已經有檔案貯存，電腦沒有任何貯存

3. 啟動 VS Code，點擊 Explorer 圖標（左上角）

4. 選擇Clone Repository

5. 輸入Github存儲庫的完整網址(在最尾加.git)，例如 https://github.com/username/reponame.git

6. 選擇電腦文件夾作為存儲庫

7. VS Code會轉到瀏覽器上登錄您的github帳戶

8. 在瀏覽器上登錄您的github帳戶（如果已經登錄，瀏覽器可能會顯示local host error，只需返回 VS Code）

9. GIthub檔案將保存到電腦文件夾，並跟踪更改


## B. Gitub中沒有檔案，但在電腦文件夾中已經有檔案

3. 啟動 VS Code，點擊 Explorer 圖標（左上角）

4. 選擇Open folder並選擇電腦文件夾

5. 點擊“Yes, I trust the authors”

6. 點擊Source Control圖標（左側的第三個圖標）

7. 選擇Initialize Repository

8. 點擊SOURCE CONTROL後的“...”，選擇“Branch”，然後選擇“Rename Branch...”

9. 將“master”重命名為“main”

10. 點擊SOURCE CONTROL後的“...”，選擇“Remote”，然後選擇“Add Remote...”

11. 輸入Github存儲庫的完整網址(在最尾加.git)，例如 https://github.com/username/reponame.git

12. 輸入存儲庫的名稱（可以與電腦文件夾名稱不同）

13. VS Code會轉到瀏覽器上登錄您的github帳戶

14. 在瀏覽器上登錄您的github帳戶（如果已經登錄，瀏覽器可能會顯示local host error，只需返回 VS Code）

15. 點擊頂部菜單欄上的“Terminal”，選擇"New Terminal"

16. 在Terminal中，輸入以下指令：

    git config --global user.name "username" (你的github用戶名)

    git config --global user.email "email" (你的github郵箱)

17. 輸入“exit”關閉Terminal

18. 將鼠標懸停在左側菜單中的“Changes”上，然後點擊“+”

19. 在“Message (Ctrl+Enter to commit on'main')”框中輸入批注（不能留空）

20. 點擊“勾號”圖標，然後點擊“Publish the branch”

21. GIthub檔案將保存到電腦文件夾，並跟踪更改

## 完成新編程後：

a. 點擊Source Control圖標（左側的第三個圖標）

b. 將鼠標懸停在左側菜單中的“Changes”上，然後點擊“+”

c. 在“Message (Ctrl+Enter to commit on'main')”框中輸入批注（不能留空）

d. 點擊“勾號”圖標，然後點擊“Sync Changes”接著點擊“OK”

注意：如果Github中的檔案比電腦中的更新，則需要先執行“pull”

e. 電腦中的檔案會更新到github上
