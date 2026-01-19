# 🌐 Server Ports — Quick Notes

## 1. What is the definition of a server port?

A **server port** is a **logical communication endpoint** on a server that identifies a specific process or service.

It allows a server to **receive and send data** to clients over a network using transport protocols such as **TCP** or **UDP**.

---

## 2. What is server port range?

The server port range is:

**0 to 65,535**

### Port range categories
- **0–1023** — Well-known ports  
- **1024–49151** — Registered ports  
- **49152–65535** — Dynamic / private ports  

---

## 3. How many bits does the number above represent?

The port number is represented using **16 bits**.

**Explanation:**
- 2¹⁶ = **65,536** possible values  
- Valid port numbers range from **0 to 65,535**

---

## 4. State 10 common server ports

| Port | Service |
|-----:|---------|
| 20 | FTP (Data) |
| 21 | FTP (Control) |
| 22 | SSH |
| 23 | Telnet |
| 25 | SMTP |
| 53 | DNS |
| 80 | HTTP |
| 110 | POP3 |
| 143 | IMAP |
| 443 | HTTPS |
