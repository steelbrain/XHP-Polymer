<?hh // strict
class :property extends :xhp:html-element {
  attribute
    Stringish name,
    Stringish value;
  category %flow;
  children empty;
  protected string $tagName = 'property';
}
