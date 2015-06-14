---
layout: post
title:  "homebrew and nodejs"
date:   2015-05-11 11:52:00
categories: martin
tags: [nodejs, homebrew, nerdstuff]
permalink: blog/:title
---

## Problem
Ich hatte nodejs auf meiner Maschine installiert. Jetzt wollte ich homebrew installieren. Das ging gut. Im Anschluss ging allerdings mein npm (Node Package Manager) nicht mehr.

## Lösung

### Node via brew installieren
Brew erkennt dabei Problem und listet diese auf.
```
brew install node
```

### Probleme mit brew listen
```
brew doctor
```

### Node wieder deinstallieren
```
brew uninstall node
```

### Alle Node modules löschen
```
rm -rf /usr/local/lib/node_modules
```

### ownership von /usr/local setzen
```
sudo chown -R $USER:admin /usr/local
```

### Node wieder installieren
```
brew install node
```

### Anzeige aller globalen node modules
```
npm list -g --depth=0
```

Es gibt noch das Problem, dass man mitunter modules nur via sudo installieren kann. Dazu gibt es eine Anleitung dies zu umgehen, welche ich aber nicht getestet habe:

[How to run npm without sudo](http://competa.com/blog/2014/12/how-to-run-npm-without-sudo/)