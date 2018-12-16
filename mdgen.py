import markdown
import markdown.extensions.codehilite
from sys import argv

# Mathjax Extension
class MathJaxPattern(markdown.inlinepatterns.Pattern):

    def __init__(self):
        markdown.inlinepatterns.Pattern.__init__(
            self,
            r'(?<!\\)(\$\$?)(.+?)\2'
        )

    def handleMatch(self, m):
        node = markdown.util.etree.Element('mathjax')
        node.text = markdown.util.AtomicString(
            m.group(2) + m.group(3) + m.group(2))
        return node


class MathJaxExtension(markdown.Extension):

    def extendMarkdown(self, md, md_globals):
        # Needs to come before escape matching because \ is pretty important in
        # LaTeX
        md.inlinePatterns.add('mathjax', MathJaxPattern(), '<escape')


def latex_friendly(configs=[]):
    return MathJaxExtension(configs)


input_file = open(argv[1])
text = input_file.read()

text = markdown.markdown(text, extensions=['markdown.extensions.tables','markdown.extensions.fenced_code','markdown.extensions.codehilite',latex_friendly()])

text = text.replace('<table','<table class="table"')
text = text.replace('<img','<img style="max-width:100%"')
text = text.replace('<blockquote>','<blockquote class="note">')



print(text)