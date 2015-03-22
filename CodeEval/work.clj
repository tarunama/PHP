(fn [& more]
  (reduce
    (fn [x y]
      (when (< x y)
        y x))
    more))
