---
layout: default
title: aszel.com bike routes
permalink: /bikeroutes/
position: 3
---

<ul class="post-list">
{% for post in site.posts %}
{% if post.categories contains 'bikeroutes' %}
<li>
    <p class="post-list-date">
        <span class="post-meta post-list-date-day">{{ post.date | date: "%-d %b" }}</span>
        <span class="post-meta post-list-date-year">{{ post.date | date: "%Y" }}</span>
    </p>
    <h2>
        <a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a>
        <p class="post-meta">{% if post.meta %}{{ post.meta }}{% endif %}</p>
    </h2>
</li>
{% endif %}
{% endfor %}
</ul>