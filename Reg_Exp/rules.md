What is regular expression?
Regular expression is a pattern to find something particularly.

Example: \d{3}(-\d{5})
        This pattern means there will be 8 digit. After First 3 digit there must be a - and 5 digits which is totally optional.

Php follows PCRE regular expression which was founded by perl language. The rules of pattern writing are same for all.

Delimeter
It means the boundary or area. / it is most used. Besides #, % are also used. 
character, number, backslash, space are not used to setup delimeters. 
    /web/ - it finds only the 'web' word
    #[a-z]# - it matches anything from a to z
    /[a\-z]/ - but it differs from the previous one. It is 'a' or '-' or 'z'

Meta characters
There are some symbols which are called meta characters. Dont use them to match and their meaning is special.

    $ () * + . ? [] \ ^ {} |  --> Meta characters

/$!/ - this pattern matches while find a word where ! position is at last. Ex: wow!, hurray!
. - it means any character /re.oan/ matches rejoan or rezoan. In particular, any character between e or o
| - its like or option. /re(j|z)oan/ it means the word is start with re then j or z and finally finish with oan.

Quantifier
Some of the meta characters are called quantifier which counts how many times the item will appear. 

    * ? +

/r+/ - it means there should be exist at least one r such as r, rr, roe

* - when it sets on an item that means it can be 0 or as much as we want. ra* - r, ra, raa, raaa

? - it could be optional.

Character class
Everything appears in the [], it is character class. [a-z] it means that colud be anything from a to z.
The meaning of meta character class is different while it appears in character class. 
/^web/ - it finds the line which starts with the web word.
[/^web/] - it is totally different and it finds the line where the web word does not exist.

some characters meaning with backslash \
\d - this pattern is only for number
\D- this pattern is only for non numeric
\s - space
\S - not space

Bangladeshi mobile number : 01771-100200
how can we set a pattern? 
lets do this 
\d{5}-\d{6}