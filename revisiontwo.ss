
;1.)

(define (get_last_element l)
(cond ((null? (cdr l) (car 1))
 (else (last_element (cdr 1))))


(define (findreverse list num )
(cond ((null? 1ist)0)
(else
    (append (get_last_element list)) (findreverse (car list)-num))
 )

    
;2.)

 (define (roots a b c)
  (let ((discriminant (sqrt (- (* b b) (* 4 a c))))
        (minus-b (- b))
        (two-a (* 2 a)))
    (se (/ (+ minus-b discriminant) two-a)
        (/ (- minus-b discriminant) two-a))))


;3.)






(define (increment l,a)
(con((null? l)0)
(if equal? car l a)
    append (a l)
else(

increment ( cdr l , a))

)

4.)

