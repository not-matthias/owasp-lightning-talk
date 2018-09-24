
[//]: # (Topics:)
[//]: # (What is OWASP?)
[//]: # (OWASP Top 10)
[//]: # (Injection)
[//]: # (XSS)



# OWASP Lightning Talk
#### by <a href="https://github.com/not-matthias" style="text-decoration:none; color: black;">not-matthias</a>

---

## The OWASP Foundation

<img src="./owasp-logo.png" width="50%" height="50%" align="middle">

<small>Source: <a  href="https://www.secplicity.org/2017/04/12/owasp-top-10-web-application-security-update/" style="text-decoration:none; color: black;">secplicity.com</a></small>

+++ 

### What is the OWASP Foundation?

@ul

- **O**pen **W**eb **A**pplication **S**ecurity **P**roject
- Free and open software security community
- Nonprofit organization
- Not driven by commercial interests

@ulend

--- 

## The OWASP Top 10 List

+++

### What is the OWASP Top 10 List?

@ul

- most critical security risks to web applications
- raise the awareness about application security
- identifies most critical risks facing organizations

@ulend

+++

### Contents

@ol

- **Injection**
- Broken Authentication and Session Management
- Sensitive Data Exposure
- XML External Entity (XXE)
- Broken Access Control
- Security Misconfiguration
- **Cross-Site Scripting (XSS)**
- Insecure Deserialization
- Using Components with Known Vulnerabilities
- Insufficient Logging and Monitoring

@olend

--- 

# Injection

<img src="https://imgs.xkcd.com/comics/exploits_of_a_mom.png" width="80%" height="80%" align="middle">

<small>Source: <a href="https://xkcd.com/327/" style="text-decoration:none; color: black;">xkcd.com</a></small>

+++

### What's an injection?

> SQL injection is a code injection technique, used to attack data-driven applications, in which nefarious SQL statements are inserted into an entry field for execution (e.g. to dump the database contents to the attacker).
> 
> <small>Source: Wikipedia</small>

+++

### An easier explanation

> “You go to court and write your name as ‘Michael, you are now free to go’. The judge then says ‘Calling Michael, you are now free to go’ and the bailiffs let you go, because hey, the judge said so.”
> 
> <small>Source: <a href="https://news.ycombinator.com/item?id=4951003" style="text-decoration:none; color: black;">HackerNews</a></small>

+++

### 

--- 

# XSS


