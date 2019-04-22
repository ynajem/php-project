<style>
.timeline-item {
 padding:3em 2em 2em;
 position:relative;
 border-left:1px solid #e4e4e4
}
.timeline-item:before {
 content:attr(date-is);
 position:absolute;
 left:2em;
 font-weight:bold;
 top:1em;
 display:block;
 font-weight:700;
 font-size:.785rem
}
.timeline-item:after {
 width:15px;
 height:15px;
 display:block;
 top:1em;
 position:absolute;
 left:-9px;
 border-radius:10px;
 content:'';
 background:white;
 border:3px solid
}
.timeline-item:last-child {
 border-image:linear-gradient(to bottom, rgba(0,0,0,0.1) 60%, transparent) 1 100%
}
.timeline-item.green:after {
 border-color:#18ce0f
}
.timeline-item.blue:after {
 border-color:#2CA8FF
}
.timeline-item.warning:after {
 border-color:#FFB236
}
.timeline-item h5 {
 margin:0
}
.timeline-item .msg {
 margin:15px 0
}

h5, .h5 {
  font-size: 1.57em;
  line-height: 1.4em;
  margin-bottom: 15px;
}



.str { color: #0d904f } /* string  - pink */
.kwd { color: #3b78e7; font-weight: bold; }
.com { color: #d81b60; } /* comment - skyblue */
.typ { color: #98fb98; } /* type    - lightgreen */
.lit { color: #cd5c5c; } /* literal - darkred */
.pun { color: #37474f; }    /* punctuation */
.pln { color: #37474f; }    /* plaintext */
.tag { color: #3b78e7; font-weight: bold; } /* html/xml tag    - lightyellow*/
.atn { color: #bdb76b; font-weight: bold; } /* attribute name  - khaki*/
.atv { color: #0d904f; } /* attribute value - pink */
.dec { color: #98fb98; } /* decimal         - lightgreen */

.prettyprint {
  font-size:13px;
  padding: 6px;
  background-color: #f5f5f5;
  border: 1px solid #cccccc;
}
.prettyprint.linenums {
  box-shadow: inset 36px 0 0 #fbfbfc, inset 37px 0 0 #ececf0;
}

ol.linenums li {
  list-style: decimal;
  padding-left: 10px;
  color: #bebec5;
  line-height: 18px;
}
li.L1, li.L3, li.L5, li.L7, li.L9 {background: inherit;}


</style>

<div class="col">
  <div class="card mb-3">
      <div class="card-body">
          <div class="timeline-item green" date-is="20-04-2018 - Today">
              <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
              <small><a href="#" title="">Elisse Joson</a> San Francisco, CA</small>
              <div class="msg">
                  <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
              </div>
              <span><a href="#" class="mr-2">Like</a><a href="#">Comment</a> </span>
          </div>
          <div class="timeline-item blue" date-is="19-04-2018 - Yesterday">
              <h5>Oeehhh, that's awesome.. Me too!</h5>
              <small><a href="#" title="">Katherine Lumaad</a> Oakland, CA</small>
              <div class="msg">
                  <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                  <pre class="prettyprint linenums scrollable">
#!/usr/bin/env python

# import modules used here -- sys is a very standard one
import sys

# Gather our code in a main() function
def main():
    print 'Hello there', sys.argv[1]
    # Command line args are in sys.argv[1], sys.argv[2] ...
    # sys.argv[0] is the script name itself and can be ignored

# Standard boilerplate to call the main() function to begin
# the program.
if __name__ == '__main__':
    main()</pre>
              </div>
              <span><a href="#" class="mr-2">Like</a><a href="#">Comment</a> </span>
          </div>
          <div class="timeline-item warning" date-is="21-02-2018">
              <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
              <small><a href="#" title="">Gary Camara</a> San Francisco, CA</small>
              <div class="msg">
                  <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
              </div>
              <span><a href="#" class="mr-2">Like</a><a href="#">Comment</a> </span>
          </div>
      </div>
  </div>
</div>
    
