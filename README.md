<!-- Logo SAPBot -->

# SAPBot Project
SAPBot project is the Skype bot with LUIS, natural language processor. SAPBot project is integration of three bot. It are Integration bot, Security bot and Basis bot.

**Badges will go here**

- build status
- issues
- devDependencies
- downloads
- etc.
![](https://pandao.github.io/editor.md/images/logos/editormd-logo-180x180.png)

![](https://img.shields.io/github/stars/pandao/editor.md.svg) ![](https://img.shields.io/github/forks/pandao/editor.md.svg) ![](https://img.shields.io/github/tag/pandao/editor.md.svg) ![](https://img.shields.io/github/release/pandao/editor.md.svg) ![](https://img.shields.io/github/issues/pandao/editor.md.svg) ![](https://img.shields.io/bower/v/editor.md.svg)

<br>
**Table of Contents**

[TOCM]

[TOC]


## Getting Started
You can develop and test this Chatbot by using Vitaul Studio. When you would like to runing the code, press Ctrl+F5 (without Debug mode) or F5 (Debug mode).

### Prerequisites
What things you need to install the software for develop and testing this project.

####For Developer

- Visual Studio
- Git Bash 

####For Testing

- Admin Authentication in server

### Installing

A step by step, how to get a development env running

####For Developer

1. Create a folder for this project
2. Open Git Bash  and navigate to the folder. Use the following command to reach it<br>
```
cd <file path>
```

3. You have to set up SSH authentication, so you can connect to the Git repository.  First, use the following command to see if you already have an SSH key set up on your computer<br>
```
cat ~/.ssh/id_rsa.pub
```
<!-- picture id_rsa -->
The picture abrove, Example of  an existing SSH key .<br>
<b>If it identifies an existing SSH key, you should skip the instructions below.</b>
• To do so, use the following command. For &lt;user&gt;@&lt;url&gt;. For example, savchong@na.xom.com
```
ssh-keygen –t rsa –C “<user>@<url>” –b 4096
```
• When you see the following line, just press Enter. It will put the SSH key in the default location.
```
Enter file in which to save the key (/C//.ssh/id_rsa):
```
• You will be prompted to enter a passphrase. If you press Enter without typing a passphrase, your SSH won’t be passphrase –protected, but it’s recommended to enter one. Be sure to remember it.
• At this point, you should have an SSH key on your computer. Use the following command to copy it onto your clipboard
```
cat ~/.ssh/id_rsa.pub | clip
```
• Now sign in to https://gitserver.xtonet.com/smpatel/BasisBot and click on the Settings button for your profile.
picture
• Navigate to the SSH Keys tab and paste the contents of your clipboard into the text box labeled “Key”. Ensure that the title assigned to it is identifiable because this SSH key will only match the current computer.<br>

4. dkfdjfdj










